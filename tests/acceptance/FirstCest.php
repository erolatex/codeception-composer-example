<?php

use Codeception\Example;
use Yandex\Allure\Adapter\Model\TestCase;
use Yandex\Allure\Adapter\Annotation\Title;
use Yandex\Allure\Adapter\Annotation\Description;
use Yandex\Allure\Adapter\Annotation\TestCaseId;
use Yandex\Allure\Adapter\Annotation\Issues;

/**
 * Class FirstCest
 * Tests links
 */
class PageCest extends TestCase
{
    /**
     * @Title("Test link title")
     * @Issues("SSS-1111")
     * @TestCaseId("23")
     * @Description("Test link test desc")
     * @dataProvider pageProvider
     * @param AcceptanceTester $I
     * @param Example $example
     */
    public function staticPages(AcceptanceTester $I, Example $example)
    {
        $I->amOnPage($example['url']);
        $I->see($example['title']);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return [
            ['url' => "/", 'title' => "Website"],
            ['url' => "/info", 'title' => "Info"],
            ['url' => "/about-us", 'title' => "About Us"],
            ['url' => "/contact-us", 'title' => "Contact Us"]
        ];
    }
}