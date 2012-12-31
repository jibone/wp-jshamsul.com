#
# cakefile for compile and build
#

{exec} = require 'child_process'
fs = require 'fs'

lastChange = {}

# -- coffee to js
coffee = ['coffee/app.coffee']
js = ['js/app.js']

# -- less to css
less = ['less/jshamsul.less']
css = ['css/jshamsul.css']

compileCoffee = (file) ->
  exec "coffee -c #{file}", (err, stdout, stderr) ->
    return console.error err if err
    console.log "Compiled #{file}"

compileLess = (file) ->
  exec "lessc -x #{file} > #{css}", (err, stdout, stderr) ->
    return console.error err if err
    console.log "Compiled #{file}"

watchFile = (file, fn) ->
  try
    fs.watch file, (event, filename) ->
      return if event isnt 'rename'
      fn file if Date.now() - lastChange[file] > 1000
      lastChange[file] = Date.now();
  catch e
    console.log "Error watch #{file}"

watchFiles = (files, fn) ->
  for file in files
    lastChange[file] = 0
    watchFile file, fn
    console.log "Watching #{file}"

# -- build all files...
task 'build', 'Compile *.coffee and *.less', ->
  compileCoffee(f) for f in coffee
  compileLess(f) for f in less

# -- build less files...
task 'build:css', 'Compile *.less to *.css', ->
  compileLess(f) for f in less

# -- build coffee files...
task 'build:js', 'Compile *.coffee to *.js', ->
  compileCoffee(f) for f in coffee

# -- watch all files...
task 'watch', 'Watch & Compile *.coffee and *.less', ->
  watchFiles coffee, compileCoffee
  watchFiles less, compileLess
