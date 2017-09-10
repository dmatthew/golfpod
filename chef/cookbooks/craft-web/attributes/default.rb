default['craft']['domain'] = ''

# Craft docroot
default['craft']['docroot'] = '/var/www/'

# .env file
default['craft']['env']['db_driver']       = 'mysql'
default['craft']['env']['db_server']       = 'localhost'
default['craft']['env']['db_user']         = 'root'
default['craft']['env']['db_password']     = ''
default['craft']['env']['db_database']     = ''
default['craft']['env']['db_schema']       = 'public'
default['craft']['env']['db_table_prefix'] = ''

# Users and groups
default['craft']['www_user']['name']  = 'www-data'
default['craft']['www_user']['group'] = 'www-data'
