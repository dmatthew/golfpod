# Setup

## Dependencies

Install the following programs on your development machine:

* [Vagrant](https://www.vagrantup.com/downloads.html)
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Chef](https://downloads.chef.io/chefdk)

Clone this repository:

* `git clone git@github.com:dmatthew/golfpod.git`

Change into your golfpod project's root directory and run the following command:

* `vagrant up`

### Install NPM Dependencies
```
vagrant ssh web
cd /vagrant
npm install
```

This will install all of the npm packages that are needed.

### Build Assets

* `npm run dev`

This will compile the SASS files into CSS files. It also copies images into the `web/images` directory.
