Vagrant.configure(2) do |config|
    # The most common configuration options are documented and commented below.
    # For a complete reference, please see the online documentation at
    # https://docs.vagrantup.com.

    config.vm.box = "bento/ubuntu-16.04"

    # Share an additional folder to the guest VM.
    # arg1, path on the host to the actual folder.
    # arg2, path on the guest to mount the folder.
    # arg3, set of non-required options.
    # config.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=777","fmode=777"], type: "virtualbox"

    # virtualbox base box config
    config.vm.provider "virtualbox" do |vb|
        vb.memory = "2048"
        vb.gui = false
    end

    if Vagrant.has_plugin?("vagrant-cachier")
        config.cache.scope = :box
    end

    if Vagrant.has_plugin?("berkshelf")
        config.berkshelf.enabled = true
        config.berkshelf.berksfile_path = './chef/Berksfile'
    else
        config.berkshelf.enabled = false
    end

    if Vagrant.has_plugin?("vagrant-hostmanager")
        config.hostmanager.enabled = true
        config.hostmanager.manage_host = true
        config.hostmanager.ignore_private_ip = false
        config.hostmanager.include_offline = true
    end

    # db config
    config.vm.define "data" do |data|
        data.vm.hostname = "db.dev.golfpod.org"
        data.vm.network "private_network", ip: "192.168.55.20"

        if Vagrant.has_plugin?("vagrant-hostmanager")
            data.hostmanager.aliases = %w(dev.db.golfpod.org)
        end

        # chef provision
        data.vm.provision "chef_zero" do |chef|
            chef.environment        = "development"
            chef.environments_path  = "chef/environments"
            chef.cookbooks_path     = "chef/cookbooks"
            chef.roles_path         = "chef/roles"
            chef.nodes_path         = "chef/nodes"
            chef.add_role "base"
            chef.add_role "data"
        end
    end

    # web config
    config.vm.define "web", primary: true do |web|
        web.vm.hostname = "web.dev.golfpod.org"
        web.vm.network "private_network", ip: "192.168.55.10"

        if Vagrant.has_plugin?("vagrant-hostmanager")
            web.hostmanager.aliases = %w(dev.golfpod.org)
        end

        # chef provision
        web.vm.provision "chef_zero" do |chef|
            chef.environment        = "development"
            chef.environments_path  = "chef/environments"
            chef.cookbooks_path     = "chef/cookbooks"
            chef.roles_path         = "chef/roles"
            chef.nodes_path         = "chef/nodes"
            chef.add_role "base"
            chef.add_role "web"
            # chef.log_level = :debug
        end
    end
end
