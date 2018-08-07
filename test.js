
///broadcast
// Bitfumes Webnologies




// real time chat

//https://www.youtube.com/watch?v=izmJMjT8-Ao&index=5&list=PLug1zoQwW_UA9TWjLv4AMh6m6N82mEHXK


///https://www.tutorialspoint.com/php/php_facebook_login.htm


/*  Have no install node.js now install node.js

composer require laravel-frontend-presets/bulma
php artisan preset bulma-auth
npm install
npm run production
npm install font-awesome --save


####### resource/assets/scss/app.scss ##########
@import "bulma";
@import "node_modules/font-awesome/scss/font-awesome.scss"


####### https://laravel.com/docs/5.5/broadcasting ######
composer require pusher/pusher-php-server
npm install --save laravel-echo pusher-js

######### Create app in pusher ############
and paste in .env file


##### config/app.php ############
App\Providers\BroadcastServiceProvider::class,

##### config/boradcast.php ############
'options' => [
	'cluster' => "ap2",
	'encrypted' => true,
],


####### resource/assets/js/bootstrap.js ##########
import Echo from 'laravel-echo'
 window.Pusher = require('pusher-js');
window.Echo = new Echo({
   broadcaster: 'pusher',
   key: 'e4e07ee3308e61fa5544',
   cluster: "ap2"
});


######### .env file ############
BROADCAST_DRIVER=pusher


#### php artisan factory ######
php artisan tinker
factory('App\User', 20)->create() 


#############
make a model


#########################
configure Friend Factory
 configure User model
 configure Friend model
configure route


work on FriendController
create view



npm run watch

/*PUSHER_APP_CLUSTER=ap2

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

*/