# symfony-vis API Platform


#Create users table in DB:

bin/console doctrine:schema:create

email "admin@gmail.com" and the password "123456" (you can change it ):

php bin/console doctrine:fixtures:load --append --group=UserFixtures



# Step to Make Entity and Migration

*check your file .env make sure it's correct configuration

1. Make Entity with API 

php bin/console make:entity --api-resource

2. Make Migration

' php bin/console make:migration'

3. Update Your Database

' php bin/console doctrine:migrations:migrate'

- check you API
 
http://127.0.0.1:8000/api
