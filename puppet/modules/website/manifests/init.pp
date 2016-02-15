class website::install {
  exec { 'create-database':
    unless  => '/usr/bin/mysql -u root -pvagrant vagrant_db',
    command => '/usr/bin/mysql -u root -pvagrant --execute=\'create database vagrant_db\'',
  }

  exec { 'create-user':
    unless  => '/usr/bin/mysql -u vagrant -pginger23 vagrant_db',
    command => '/usr/bin/mysql -u root -pvagrant --execute="GRANT ALL PRIVILEGES ON vagrant_db.* TO \'vagrant\'@\'localhost\' IDENTIFIED BY \'vagrant\'"',
  }

#  exec { 'load-db':
#    command => '/usr/bin/mysql -u vagrant -pvagrant vagrant_db < /vagrant/db/latest.sql',
#  }

#  exec { 'localise-db':
#    command => '/usr/bin/mysql -u vagrant -pvagrant vagrant_db < /vagrant/db/latest.sql',
#  }

  # Copy a working wp-config.php file for the vagrant setup.
#  file { '/vagrant/public_html/wp-config.php':
#    source => 'puppet:///modules/website/files/wp-config.php'
#  }
}
