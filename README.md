# silverstripe-flash-messages
[![Build Status](https://travis-ci.org/gordonbanderson/silverstripe-flash-messages.svg?branch=upgradess4)](https://travis-ci.org/gordonbanderson/silverstripe-flash-messages)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/badges/quality-score.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/?branch=upgradess4)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/badges/coverage.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/?branch=upgradess4)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/badges/build.png?b=upgradess4)](https://scrutinizer-ci.com/g/gordonbanderson/silverstripe-flash-messages/build-status/upgradess4)
[![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-flash-messages/coverage.svg?branch=upgradess4)](https://codecov.io/github/gordonbanderson/silverstripe-flash-messages?branch=upgradess4)

[![Latest Stable Version](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/version)](https://packagist.org/packages/rentaswag/silverstripe-flash-messages)
[![Latest Unstable Version](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/v/unstable)](//packagist.org/packages/rentaswag/silverstripe-flash-messages)
[![Total Downloads](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/downloads)](https://packagist.org/packages/rentaswag/silverstripe-flash-messages)
[![License](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/license)](https://packagist.org/packages/rentaswag/silverstripe-flash-messages)
[![Monthly Downloads](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/d/monthly)](https://packagist.org/packages/rentaswag/silverstripe-flash-messages)
[![Daily Downloads](https://poser.pugx.org/rentaswag/silverstripe-flash-messages/d/daily)](https://packagist.org/packages/rentaswag/silverstripe-flash-messages)

[![Dependency Status](https://www.versioneye.com/php/rentaswag:silverstripe-flash-messages/badge.svg)](https://www.versioneye.com/php/rentaswag:silverstripe-flash-messages)
[![Reference Status](https://www.versioneye.com/php/rentaswag:silverstripe-flash-messages/reference_badge.svg?style=flat)](https://www.versioneye.com/php/rentaswag:silverstripe-flash-messages/references)

![codecov.io](https://codecov.io/github/gordonbanderson/silverstripe-flash-messages/branch.svg?branch=upgradess4)

for flashing dem messages

## Usage

`composer install rentaswag/silverstripe-flash-messages`

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
