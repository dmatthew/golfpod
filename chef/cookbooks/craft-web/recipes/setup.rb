#
# Cookbook Name:: craft-web
# Recipe:: setup
#

www_user = node['craft']['www_user']['name']
www_group = node['craft']['www_user']['group']
craft_docroot = node['craft']['docroot']

template 'installing craft environment file' do
    path     "#{craft_docroot}/.env"
    source   'craft/.env.erb'
    group    www_group
    owner    www_user
    mode     0644
    backup   false
    action   :create
end
