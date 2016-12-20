<?php

namespace zhulei\Weixin;

use zhulei\Manager\SocialiteWasCalled;

class WeixinExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \zhulei\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'weixin', __NAMESPACE__.'\Provider'
        );
    }
}
