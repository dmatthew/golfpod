name 'web'
description 'NGINX and PHP'

default_attributes(
    'nginx' => {
        'remove_default_site' => true
    }
)

run_list(
    'recipe[cop_tls::dhparams]',
    'recipe[cop_tls::snakeoil]',
    'recipe[cop_php::default]',
    'recipe[cop_composer]',
    'recipe[cop_nginx::default]',
    'recipe[cop_mysql::install_client]',
    'recipe[cop_craft::default]',
    'recipe[craft-web::nvm]'
)
