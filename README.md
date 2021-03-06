## [HumHub](https://www.humhub.org/en) TwitchTV Chat Module

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GreenMeteor/humhub-twitchtv-module/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GreenMeteor/humhub-twitchtv-module/?branch=master) [![Build Status](https://scrutinizer-ci.com/g/GreenMeteor/humhub-twitchtv-module/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GreenMeteor/humhub-twitchtv-module/build-status/master)

This module allows for the ability of using your TwitchTV chat widget on your own site.

## Installing & Setup
1. Download via git or normal download.
2. Upload the content of your `humhub-twitchtv-module-master` to your server under `/protected/modules` and rename it `twitchtv`
3. Enable the module via `ACP --> Modules --> Modules List`
4. You will need your Twitch username then after you've gotten one replace the `{id}` with your Twitch username within this url `https://www.twitch.tv/embed/{username}/chat` and follow the next step
5. In `ACP --> Twitch Settings` place your Twitch URL that you created in the configuration option then save and now you're done.

> Note: Twitch is an external service the provides the means to place the chat within your HumHub's sidebar.

### __Authors:__
@GreenMeteor
