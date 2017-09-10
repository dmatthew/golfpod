#
# Cookbook Name:: craft-web
# Recipe:: nginx
#

php_pool     = 'www'
fpm_location = node['php']['sapi']['fpm']['conf']['pools'][php_pool]['listen'].tr('"', '')

template 'installing vhost' do
    path     "#{node['nginx']['vhost_dir']}/#{node['craft']['domain']}.conf"
    source   'nginx/nginx-vhost.conf.erb'
    group    'root'
    owner    'root'
    mode     0644
    backup   false
    action   :create
    notifies :restart, 'service[nginx]', :delayed
    variables(
        :nginx_listen  => node['craft']['nginx']['listen'],
        :hostname      => node['craft']['nginx']['hostname'],
        :docroot       => node['craft']['nginx']['docroot'],
        :fpm_location  => "unix:#{fpm_location}"
    )
end
