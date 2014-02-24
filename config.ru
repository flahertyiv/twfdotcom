require './index'
use Rack::ReverseProxy do
  reverse_proxy(/^\/blog(\/.*)$/,
    'http://wp-twf.herokuapp.com$1',
    opts = {:preserve_host => true})
end
run Sinatra::Application
