<?php

class RealImageService implements ImageService
{
  const DATABASE_CONNECTION_TIME = 2;

  public static function load($path)
  {
    // Database connection load image
    sleep(2);

    // return image
    return $path;
  }
}
