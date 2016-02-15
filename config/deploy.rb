set :application, 'base'
set :repo_url, 'git@gitlab.bjl.co.uk:bjl/######.git'


# Use :debug for more verbose output when troubleshooting
set :log_level, :info

# Apache users with .htaccess files:
# it needs to be added to linked_files so it persists across deploys:
# set :linked_files, fetch(:linked_files, []).push('.env', 'web/.htaccess')
#set :linked_files, fetch(:linked_files, []).push('.env')
set :linked_dirs, fetch(:linked_dirs, []).push('public_html/wp-content/uploads')

#before 'deploy:updated', 'grunt'
