DEMO
----
## MP4
https://user-images.githubusercontent.com/97344584/225322495-068a020b-7b28-4c0f-9635-756e8d99c969.mp4

## Registration / Login Page
![image](https://user-images.githubusercontent.com/97344584/225316166-a45991dd-6698-49c3-9fe7-b5938b0cff88.png)

## FILL MIS-MATCH PASSWORD
![image](https://user-images.githubusercontent.com/97344584/225322033-ab52f43a-a1e9-4bbd-b20d-d7df08286cb7.png)

## AS VALIDATION ACROSS ALL FILEDS
![image](https://user-images.githubusercontent.com/97344584/225321821-d910d643-84db-4eba-b43e-c7d6bef841c7.png)

## RECOVER ERROR
![image](https://user-images.githubusercontent.com/97344584/225322130-a96f2fab-48ef-43b7-966d-5898f91cf75a.png)

## HOME PAGE
![image](https://user-images.githubusercontent.com/97344584/225322329-7be7e2bf-e507-40ac-83b5-8d3dce41070a.png)

## DASHBOARD
![image](https://user-images.githubusercontent.com/97344584/225322377-a27613a5-0a72-45e3-af6b-febcc8e774ea.png)

-----
# Project Setup


clone repo
```
git clone https://github.com/Raval-Arth/laravel-test-001.git
```
## Dependency install
```
composer install
```
```
npm install
```

### Env setup for windows
```
copy .env.example .env
php artisan key:generate
```

### Env setup for linux user
```
cp .env.example .env
php artisan key:generate
```

## Database setup
```
create database name as "laravel" in mysql.
```

### Git Bash
```
php artisan migrate:fresh
```

### for Terminal
```
php artisan migrate
```

## Start server
```
php artisan serve
```
```
npm run dev (For auto refersh server)
```

### open in browser
```
http://127.0.0.1:8000
```
