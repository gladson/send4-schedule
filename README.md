# Instalação

## 1 - Instale os pacotes necessários

```shell
    $ composer install
```

## 2 - Gerando a chave da aplicação

```shell
    $ php artisan key:generate
    
    Application key [base64:EWhR9ZVEm9Yv27B9gLaGMTicLN/HMd8zvIdnyhuBSng=] set successfully.
```

## 3 - Gerando as tabelas no banco de dados 

```shell
    $ php artisan migrate

    Migration table created successfully.
    Migrating: 2014_10_12_000000_create_users_table
    Migrated:  2014_10_12_000000_create_users_table
    Migrating: 2014_10_12_100000_create_password_resets_table
    Migrated:  2014_10_12_100000_create_password_resets_table
    Migrating: 2016_06_01_000001_create_oauth_auth_codes_table
    Migrated:  2016_06_01_000001_create_oauth_auth_codes_table
    Migrating: 2016_06_01_000002_create_oauth_access_tokens_table
    Migrated:  2016_06_01_000002_create_oauth_access_tokens_table
    Migrating: 2016_06_01_000003_create_oauth_refresh_tokens_table
    Migrated:  2016_06_01_000003_create_oauth_refresh_tokens_table
    Migrating: 2016_06_01_000004_create_oauth_clients_table
    Migrated:  2016_06_01_000004_create_oauth_clients_table
    Migrating: 2016_06_01_000005_create_oauth_personal_access_clients_table
    Migrated:  2016_06_01_000005_create_oauth_personal_access_clients_table
    Migrating: 2018_09_18_140907_create_contacts_table
    Migrated:  2018_09_18_140907_create_contacts_table
    Migrating: 2018_09_18_140915_create_messages_table
    Migrated:  2018_09_18_140915_create_messages_table
```

## 4 - Gerando as chaves criptografadas (Passport)

```shell
    $ php artisan passport:install

    Encryption keys generated successfully.
    Personal access client created successfully.
    Client ID: 1
    Client Secret: NjXIQ62xD7b5ZdyvtnzmxFwOsmBrsOSnFmxbjNRg
    Password grant client created successfully.
    Client ID: 2
    Client Secret: eFm6VK23NrFmvAYORpAwsrbQyZkkfZafpJBOCfN5
```


