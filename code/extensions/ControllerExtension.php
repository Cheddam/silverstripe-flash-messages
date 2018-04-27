<?php
namespace Cheddam\SilverStripeFlashMessages;

use SilverStripe\Control\Session;
use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;
use SilverStripe\Core\Extension;

class ControllerExtension extends Extension
{
    /**
     * Stores a flash message to be displayed on the next page.
     * @param  string $message The message to display
     * @param  string $type    (Optional) A class (or classes) to apply to the message.
     */
    public function flashMessage($message, $type = '')
    {
        // Get the existing flash message array (if it exists)
        $messages = Session::get('flashmessages') ? json_decode(Session::get('flashmessages')) : [];

        // Append the new message to the array
        $messages[] = ['Message' => $message, 'Type' => $type];

        // Update the flash message array
        Session::set('flashmessages', json_encode($messages));
    }

    public function FlashMessages()
    {
        $messages = Session::get('flashmessages') ? json_decode(Session::get('flashmessages'), true) : [];

        // todo: make silverstripe not stupid
        $return = new ArrayList();
        foreach ($messages as $message) {
            $return->push(new ArrayData($message));
        }

        Session::clear('flashmessages');

        return $return;
    }

    public function FlashMessagesPresent()
    {
        return Session::get('flashmessages') ? true : false;
    }
}
