<?php

namespace Gdinko\Prim\Commands;

use Gdinko\Prim\Facades\Prim;
use Gdinko\Prim\Models\PrimApiStatus;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class PrimApiStatusCommand extends Command
{
    public const API_STATUS_OK = 200;
    public const API_STATUS_NOT_OK = 404;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prim:api-status
                            {--clear= : Clear Database table from records older than X days}
                            {--timeout=5 : Prim API Call timeout}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets Prim API Status and saves it in database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('-> Prim Api Status');

        try {
            $this->clear();

            Prim::setTimeout(
                $this->option('timeout')
            );

            $methods = Prim::getAllMethods();

            if (! empty($methods)) {
                PrimApiStatus::create([
                    'code' => self::API_STATUS_OK,
                ]);

                $this->info('Status: ' . self::API_STATUS_OK);
            }
        } catch (\Exception $e) {
            PrimApiStatus::create([
                'code' => self::API_STATUS_NOT_OK,
            ]);

            $this->newLine();
            $this->error('Status: ' . self::API_STATUS_NOT_OK);
            $this->error(
                $e->getMessage()
            );
        }

        return 0;
    }

    /**
     * clear
     *
     * @return void
     */
    protected function clear()
    {
        if ($days = $this->option('clear')) {
            $clearDate = Carbon::now()->subDays($days)->format('Y-m-d H:i:s');

            $this->info("-> Prim Api Status : Clearing entries older than: {$clearDate}");

            PrimApiStatus::where('created_at', '<=', $clearDate)->delete();
        }
    }
}
