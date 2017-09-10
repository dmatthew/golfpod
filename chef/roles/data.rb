name 'data'
description 'MySQL database'

default_attributes()

run_list(
    'recipe[cop_mysql::install_server]'
)
