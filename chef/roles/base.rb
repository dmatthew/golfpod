name 'base'
description 'OS base packages'

run_list(
    'recipe[cop_base::default]'
)
