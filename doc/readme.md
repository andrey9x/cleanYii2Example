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
docker-compose exec web composer require "yiisoft/yii2:*"
docker-compose exec web composer require yiisoft/yii2