set :stage, :beta

# Simple Role Syntax
# ==================
#role :app, %w{deploy@example.com}
#role :web, %w{deploy@example.com}
#role :db,  %w{deploy@example.com}

# Extended Server Syntax
# ======================
set :deploy_to, -> { "/var/www/#{fetch(:application)}/#{fetch(:stage)}/build/" }

server 'baseserver', user: 'deploy', roles: %w{web app db}

# Bonus! Colors are pretty!
def red(str)
  "\e[31m#{str}\e[0m"
end

# Figure out the name of the current local branch
def current_git_branch
  branch = `git symbolic-ref HEAD 2> /dev/null`.strip.gsub(/^refs\/heads\//, '')
  puts "Deploying branch #{red branch}"
  branch
end

# Set the deploy branch to the current branch
set :branch, current_git_branch

#set :grunt_tasks, 'build'

fetch(:default_env).merge!(wp_env: :beta)

