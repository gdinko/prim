<?php

namespace Gdinko\Prim\Actions;

trait ManagesApiCommon
{
    /**
     * getAllMethods
     *
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     */
    public function getAllMethods(): array
    {
        return $this->post(
            "RPC.common.Api.ApiCommon.getAllMethods"
        )['result'];
    }

    /**
     * getMethodParams
     *
     * @param  string $method
     * @param  string $verb
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Illuminate\Support\ItemNotFoundException
     */
    public function getMethodParams($method, $verb): array
    {
        $package = collect($this->getAllMethods())
            ->firstOrFail(
                'package',
                str_replace('.', '::', $method)
            );

        return collect($package['action'])
            ->firstOrFail(
                'method',
                $verb
            )['params'];
    }

    /**
     * getValidationRules
     *
     * @param  string $method
     * @param  string $verb
     * @return array
     * 
     * @throws \Gdinko\Prim\Exceptions\PrimException
     * @throws \Illuminate\Support\ItemNotFoundException
     */
    public function getValidationRules($method, $verb): array
    {
        $rules = [];

        collect(
            $this->getMethodParams($method, $verb)
        )->each(function ($item) use (&$rules) {

            $rule = [];

            if ($item['required']) {
                $rule[] = 'required';
            } else {
                $rule[] = 'sometimes';
                $rule[] = 'nullable';
            }

            switch ($item['type']) {
                case 'date':
                    $rule[] = 'date';
                    break;
                case 'checkbox':
                    $rule[] = 'booolean';
                    break;
                default:
                    $rule[] = 'string';
                    break;
            }

            $rules[$item['model']] = $rule;
        });

        return $rules;
    }
}
