<?php

namespace Tests\Traits;

use Tests\Helpers\TestAccountsHelper;

trait TestAccounts
{
    protected $accountHelper;

    public function setTestAccounts(string $prefix = '')
    {
        $this->accountHelper = new TestAccountsHelper();
        $this->accountHelper->standardSetup($prefix);

        $this->assignDefaultRecords($prefix);
    }

    protected function assignDefaultRecords($prefix = '')
    {
        foreach (array_keys(get_class_vars(TestAccountsHelper::class)) as $var) {
            $this->{$prefix . $var} = $this->accountHelper->getRecord($var, $prefix);
        }
    }
}
