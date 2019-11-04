# video
https://www.youtube.com/watch?v=64HxXITKsww

# create composer.json
{
    "repositories": [
        {
            "type": "composer",
            "url": "https://asset-packagist.org"
        }
    ]
}

# install core yii2
docker-compose exec web composer require yiisoft/yii2

# install yii2-bootstrap4
docker-compose exec web composer require yiisoft/yii2-bootstrap4