require 'flour'

task 'build:less', ->
  compile 'less/jshamsul.less', 'css/jshamsul.css'

task 'build', ->
  invoke 'build:less'

task 'watch', ->
  invoke 'build:less'
  watch 'less/*.less', -> invoke 'build:less'
