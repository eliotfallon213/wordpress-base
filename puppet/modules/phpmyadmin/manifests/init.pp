# Install phpMyAdmin

class phpmyadmin::install {

  package { 'phpmyadmin':
    ensure => present,
  }

}
