const chokidar = require('chokidar')
const exec = require('child_process').exec
const watcher = chokidar.watch('pages/**/*.php')

watcher.on('change', (path) => {
  exec('make build',  (error, stdout, stderr) => {
    console.log(stdout)
    if (error !== null) {
      console.log(`exec error: ${error}`)
    }
  })
})



