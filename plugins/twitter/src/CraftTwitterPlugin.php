<?php
namespace dmatthew\crafttwitter;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

use dmatthew\crafttwitter\variables\CraftTwitterVariable;

class CraftTwitterPlugin extends \craft\base\Plugin
{

    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * CraftTwitter::$plugin
     *
     * @var CraftTwitter
     */
    public static $plugin;

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        // Register our variables
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('craftTwitter', CraftTwitterVariable::class);
            }
        );
    }

    protected function createSettingsModel()
    {
        return new \dmatthew\crafttwitter\models\Settings();
    }

    /**
     * Returns the rendered settings HTML, which will be inserted into the content
     * block on the settings page.
     *
     * @return string The rendered settings HTML
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'craft-twitter/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
