
    <body style="background-color: #000;">
        <div class="container collapse-container">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <ul class="nav nav-pills" style="margin-top:10px; margin-bottom:10px;">
                    <li class="active"><a data-toggle="tab" href="#curl-code">Curl</a></li>
                    <li><a data-toggle="tab" href="#go-code">Go</a></li>
                    <li><a data-toggle="tab" href="#java-code">Java</a></li>
                    <li><a data-toggle="tab" href="#node-code">Node</a></li>
                    <li><a data-toggle="tab" href="#php-code">PHP</a></li>
                    <li><a data-toggle="tab" href="#python-code">Python</a></li>
                    <li><a data-toggle="tab" href="#ruby-code">Ruby</a></li>
                </ul>

                <div class="tab-content" style="text-align:left;">
                    <div id="curl-code" class="tab-pane fade in active">
                        <pre><code>
CURL
var request = require('request-json');
var client = request.createClient('http://192.168.1.86:30000/');
var api_key = "BHkqgzZC7LArmKlbPGhzGWWmV"
var effect = {
activeEffect: { name: 'set-color', color: 'blue'},
passiveEffect: { name: 'set-color', color: 'green'}
};
var config = { secret: api_key, effect: effect }

client.put('DK5/zone_configuration/a_key',
        config,
        function(err, res, body){
            console.log(res);
            console.log(err);
        });
                        </code></pre>
                    </div>
                    <div id="go-code" class="tab-pane fade">
                        <pre><code>
GO
var request = require('request-json');
var client = request.createClient('http://192.168.1.86:30000/');
var api_key = "BHkqgzZC7LArmKlbPGhzGWWmV"
var effect = {
activeEffect: { name: 'set-color', color: 'blue'},
passiveEffect: { name: 'set-color', color: 'green'}
};
var config = { secret: api_key, effect: effect }

client.put('DK5/zone_configuration/a_key',
        config,
        function(err, res, body){
            console.log(res);
            console.log(err);
        });
                        </code></pre>
                    </div>
                    <div id="java-code" class="tab-pane fade">
                        <pre><code>
JAVA
var request = require('request-json');
var client = request.createClient('http://192.168.1.86:30000/');
var api_key = "BHkqgzZC7LArmKlbPGhzGWWmV"
var effect = {
activeEffect: { name: 'set-color', color: 'blue'},
passiveEffect: { name: 'set-color', color: 'green'}
};
var config = { secret: api_key, effect: effect }

client.put('DK5/zone_configuration/a_key',
        config,
        function(err, res, body){
            console.log(res);
            console.log(err);
        });
                        </code></pre>
                    </div>
                    <div id="node-code" class="tab-pane fade">
                        <pre><code>
NODE
var request = require('request-json');
var client = request.createClient('http://192.168.1.86:30000/');
var api_key = "BHkqgzZC7LArmKlbPGhzGWWmV"
var effect = {
activeEffect: { name: 'set-color', color: 'blue'},
passiveEffect: { name: 'set-color', color: 'green'}
};
var config = { secret: api_key, effect: effect }

client.put('DK5/zone_configuration/a_key',
        config,
        function(err, res, body){
            console.log(res);
            console.log(err);
        });
                        </code></pre>
                    </div>
                    <div id="php-code" class="tab-pane fade">
                        <pre><code>
PHP
var request = require('request-json');
var client = request.createClient('http://192.168.1.86:30000/');
var api_key = "BHkqgzZC7LArmKlbPGhzGWWmV"
var effect = {
activeEffect: { name: 'set-color', color: 'blue'},
passiveEffect: { name: 'set-color', color: 'green'}
};
var config = { secret: api_key, effect: effect }

client.put('DK5/zone_configuration/a_key',
        config,
        function(err, res, body){
            console.log(res);
            console.log(err);
        });
                        </code></pre>
                    </div>
                    <div id="python-code" class="tab-pane fade">
                        <pre><code>
import json
from os.path import expanduser
import requests

HOME = expanduser("~")

# creating the signal
SIGNAL = {
    "pid": "DK5QPID",
    "zoneId": "KEY_A",
    "color": "#F00",
    "effect": "SET_COLOR",
    "name": "Hello oneSignal",
    "message": "signal sent from a python script to a key",
    "shouldNotify": False
}


HEADERS = {
    "content-type": "application/json"
}

# encoding the signal to json
SIGNAL_JSON = json.dumps(SIGNAL)

PORT_NUMBER = "27301"

# sending the signal
URL = 'http://localhost:'+PORT_NUMBER+'/api/1.0/signals'
R = requests.post(URL, data=SIGNAL_JSON, headers=HEADERS)

# checking the response
if R.ok:
    print R.text
else:
    print "Error while sending the signal: " + R.text


                        </code></pre>
                    </div>
                    <div id="ruby-code" class="tab-pane fade">
                        <pre><code>
#!/usr/bin/env ruby
require 'json'
require 'net/http'

port = "27301"

url = 'http://localhost:'+port+'/api/1.0/signals'

# sending the signal
uri = URI(url)
req = Net::HTTP::Post.new(uri, 'Content-type' => 'application/json')
req.body = {pid: "DK5QPID",
            zoneId: "KEY_A",
            color: "#F00",
            effect: "SET_COLOR",
            name: "Hello oneSignal",
            message: "signal sent from a ruby script to a key",
            shouldNotify: false}.to_json

res = Net::HTTP.start(uri.hostname, uri.port) do |http|
    http.request(req)
end

# checking the response
if res.body == "OK"
    puts res.body
else
    puts "Error while sending the signal: " + res.body
end
                        </code></pre>
                    </div>
                </div>
            </div>
        </div>