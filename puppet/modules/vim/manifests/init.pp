# Install vim

class vim::install {
  package{'vim':
    ensure=>present,
  }
}
