$hub_mode = $_GET['hub_mode'];
$hub_challenge = $_GET['hub_challenge'];
$hub_verify_token = $_GET['hub_verify_token'];
if ($hub_verify_token =='YourToken')
{
    echo $hub_challenge;
}