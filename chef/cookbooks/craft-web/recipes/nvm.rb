#
# Cookbook Name:: craft-web
# Recipe:: default
#

execute 'install nvm'do
    command 'curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.6/install.sh | bash'
    user "vagrant"
    environment ({'HOME' => '/home/vagrant', 'USER' => 'vagrant'})
end
