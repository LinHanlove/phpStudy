<?php

class LoginException extends Exception
{
  //1
}

class UploadException extends Exception
{
  //1
}

try {
  throw new LoginException('Invalid username or password', 403);
} 

catch (LoginException $e) 

{
  echo 33;

}

catch (UploadException $e) 

{
  echo 33;

}
finally {
  echo '永远执行';
}