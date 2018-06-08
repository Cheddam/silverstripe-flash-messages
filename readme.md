# silverstripe-flash-messages

for flashing dem messages

## Usage

`composer require rentaswag/silverstripe-flash-messages`

In controller methods:

`$this->flashMessage('She drove me here', 'warning');`

In templates:

```php
<% if $FlashMessagesPresent %>
	<% loop $FlashMessages %>
		<div class="message $Type">$Message</div>
	<% end_loop %>
<% end_if %>
```

## Caveats

- Currently $FlashMessages can only be called once as it cleans up the messages before returning them. Currently looking for a better way to handle this.
