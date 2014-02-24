require 'rubygems'
require 'sinatra'

set :run, true
set :views, File.dirname(__FILE__) + "/views"
match "/blog" => redirect("/blog/")

get '/' do
  erb :index
end