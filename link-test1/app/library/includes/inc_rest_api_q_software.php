<style>
    pre{
        max-height: 700px;
        overflow:auto;
    }

    pre::-webkit-scrollbar-track{
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    pre::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }

    pre::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        background-color: #282c34;
    }
</style>
  <div class="container"> 
    <div class="row text-center">
      <div class=" col-xs-12 col-sm-10 col-sm-offset-1 ">
        <i style="font-size:7em;" class="fa fa-code sign-nerd" aria-hidden="true"></i>
        <div class="heading-underscore">
          <h2 class="dk-5q-color">
              <?php say("rest-api-title"); ?>
          </h2>
        </div>
        <p class="centered-text-5q"><?php say("rest-api-subtitle"); ?></p>
      </div>
    </div>
    <div class="row text-center col-xs-12">
      <button type="button" data-toggle="collapse" class="btn btn-lg button-switch" href="#collapseShowCode">
        <?php say("show-the-code"); ?>
      </button>
    </div>
    
  </div>  
  <section class="collapse" id="collapseShowCode">
    <div class="container collapse-container">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <ul class="nav nav-pills" style="margin-top:10px; margin-bottom:10px;">
          <li><a data-toggle="tab" href="#curl-code">Curl</a></li>
          <li><a data-toggle="tab" href="#go-code">Go</a></li>
          <li><a data-toggle="tab" href="#java-code">Java</a></li>
          <li><a data-toggle="tab" href="#node-code">Node</a></li>
          <li><a data-toggle="tab" href="#php-code">PHP</a></li>
          <li><a data-toggle="tab" href="#python-code">Python</a></li>
          <li class="active"><a data-toggle="tab" href="#ruby-code">Ruby</a></li>
        </ul>

    <div class="tab-content">
      <div id="curl-code" class="tab-pane fade">
        <pre><code>#!/bin/sh
#-----------------------------------------------
# This script colorize a key of a 5Q Das Keyboard
# by sending a JSON signal to the its public API
# located at http://localhost:27301
#-----------------------------------------------
set -e # quit on first error.
# Q desktop public API port #
PORT="27301"
PID="DK5QPID" # product ID
ZONEID="KEY_A" # Key to colorize
# Q desktop public API url
URL="http://localhost:$PORT/api/1.0/signals"
#
# important NOTE: if field "name" and "message" are empty then the signal is
# only displayed on the devices LEDs, not in the signal center
#
echo "Sending signal to zoneId: $ZONEID at $URL"
# sending the signal to colorize the key A in red
curl -X POST --header 'Content-Type: application/json' --header 'Accept: application/json' -d '{
    "pid": "'$PID'",
    "zoneId": "'"$ZONEID"'",
    "color": "#F00",
    "effect": "SET_COLOR",
    "name": "Hello message for '$ZONEID'",
    "message": "Message sent by script '$0'",
    "shouldNotify": true 
}' $URL

result=$?
# checking the response
if [ "$result" -eq "0" ]; then
    echo OK
    exit 0
else
    echo ERROR
    exit 1
fi</code></pre>
      </div>
  <div id="go-code" class="tab-pane fade">
      <pre><code>//-----------------------------------------------
// This script colorize a key of a 5Q Das Keyboard
// by sending a JSON signal to the its public API
// located at http://localhost:27301
//-----------------------------------------------

package main

import (
    "bytes"
    "encoding/json"
    "fmt"
    "log"
    "net/http"
    "os"
)
// A Signal represents a message to be sent to a Q device.
type Signal struct {
    ID           int64  `json:"id"`           // Not used when creating a signal
    Pid          string `json:"pid"`          // DK5QPID
    ZoneID       string `json:"zoneId"`       // KEY_A, KEY_B, etc...
    Name         string `json:"name"`         // message title
    Message      string `json:"message"`      // message body
    Effect       string `json:"effect"`       // e.g. SET_COLOR, BLINK, etc...
    Color        string `json:"color"`        // color in hex format. E.g.: "#FF0044"
    ShouldNotify bool   `json:"shouldNotify"` // whether to show a OS notification
}
func main() {
    // Q desktop public API port #.
    port := "27301"

    // creating the signal
    oneSignal := Signal{0, "DK5QPID", "KEY_A", "Hello oneSignal", "Signal sent from a go program on a key...", "SET_COLOR", "#F00", true}

    // Encode to JSON
    signalJSON := new(bytes.Buffer)
    json.NewEncoder(signalJSON).Encode(&oneSignal)

    // Construct API URL
    url := "http://localhost:" + port + "/api/1.0/signals"

    // sending the signal to colorize the key A in red
    resp, err := http.Post(url, "application/json; charset=utf-8", signalJSON)

    if err != nil {
        log.Fatal(err)
    }

    // checking the response
    if resp.StatusCode == 200 {
        fmt.Println("OK")
        os.Exit(0)
    } else {
        fmt.Println("Error: ", resp.StatusCode)
        os.Exit(1)
    }
}</code></pre>
  </div>
  <div id="java-code" class="tab-pane fade">
      <pre><code>//-----------------------------------------------
// This script colorize a key of a 5Q Das Keyboard
// by sending a JSON signal to the its public API
// located at http://localhost:27301
//-----------------------------------------------
import java.io.*;
import java.net.HttpURLConnection;
import java.net.URL;
import java.nio.charset.StandardCharsets;
import javax.swing.plaf.InputMapUIResource;

class create_one_signal {
    public static void main(String[] args) {
        // creating the signal as a string
        String signalJson = "{\"pid\": \"DK5QPID\", \"zoneId\": \"KEY_A\", \"name\": \"Hello oneSignal\", \"message\": \"signal sent from a java script (haha) to a key\", \"effect\": \"SET_COLOR\", \"color\": \"#F00\", \"shouldNotify\": false}";
        // Q desktop public API port #
        String port = "27301";

        // sending the signal to colorize the key A in red
        try {
            URL urlObj = new URL("http://localhost:" + port + "/api/1.0/signals");
            HttpURLConnection urlConnection = (HttpURLConnection) urlObj.openConnection();
            urlConnection.setRequestProperty("Content-Type", "application/json; charset=UTF-8");
            urlConnection.setDoOutput(true);
            urlConnection.setRequestMethod("POST");

            OutputStream os = urlConnection.getOutputStream();
            os.write(signalJson.getBytes("UTF-8"));
            os.close();
            // reading the response
            InputStream in = new BufferedInputStream(urlConnection.getInputStream());
            BufferedReader r = new BufferedReader(new InputStreamReader(in, StandardCharsets.UTF_8));
            System.out.println(r.readLine());
            in.close();
            urlConnection.disconnect();
            // checking the response
        } catch (IOException e) {
            System.out.println("Error while sending the signal: " + e.getMessage());
            System.exit(1);
        }
    }
}</code></pre>
  </div>
  <div id="node-code" class="tab-pane fade">
      <pre><code>//-----------------------------------------------
// This script colorize a key of a 5Q Das Keyboard
// by sending a JSON signal to the its public API
// located at http://localhost:27301
//-----------------------------------------------
"use strict";

var request = require('request');
// Q desktop public API url
let apiUrl = "http://localhost:27301/api/1.0/signals";
// creating the signal to colorize the key A in red
let signal = {
    "pid": "DK5QPID",
    "zoneId": "KEY_A",
    "color": "#F00",
    "effect": "SET_COLOR",
    "name": "Hello message title",
    "message": "Message body goes here...",
    "shouldNotify": true 
}
// sending the signal
request.post({
    url: apiUrl,
    headers: {
        "Content-Type": "application/json"
    },
    body: signal,
    json:true
}, function(error, response, body){
    // checking the response
    if(response.statusCode == 200){
        console.log("\n\nOK");
    } else {
        console.log("ERROR: ", body);
        process.exit(1);
    }
});</code></pre>
  </div>
  <div id="php-code" class="tab-pane fade">
      <pre><code class="php">//-----------------------------------------------
// This script colorize a key of a 5Q Das Keyboard
// by sending a JSON signal to the its public API
// located at http://localhost:27301
//-----------------------------------------------
// Q desktop public API port #
$port = "27301";

$url = "http://localhost:".$port."/api/1.0/signals";
// if curl_init is undefined, run: sudo apt-get install php-curl
$ch = curl_init($url);

// construction of the signal object
$signal = new \stdClass();
$signal->pid = "DK5QPID";
$signal->zoneId = "KEY_A";
$signal->color = "#F00";
$signal->effect = "SET_COLOR";
$signal->name = "Hello oneSignal";
$signal->message = "signal sent from a php script to a key";
$signal->shouldNotify = false;

// encoding to json
$signalJson = json_encode($signal);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $signalJson);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
// sending the signal to colorize the key A in red
$result = curl_exec($ch);

// checking the response
if ($result == "OK") {
    echo $result."\n";
} else {
    echo "Error while sending the signal: ".$result."\n";
}</code></pre>
  </div>
  <div id="python-code" class="tab-pane fade">
      <pre><code class="python">#-----------------------------------------------
# This script colorize a key of a 5Q Das Keyboard
# by sending a JSON signal to the its public API
# located at http://localhost:27301
#-----------------------------------------------
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
# Q desktop public API port #
PORT_NUMBER = "27301"
# Q desktop public API url
URL = 'http://localhost:'+PORT_NUMBER+'/api/1.0/signals'
# sending the signal to colorize the key A in red
R = requests.post(URL, data=SIGNAL_JSON, headers=HEADERS)

# checking the response
if R.ok:
    print R.text
else:
    print "Error while sending the signal: " + R.text</code></pre>
  </div>
  <div id="ruby-code" class="tab-pane fade in active">
      <pre><code>#!/usr/bin/env ruby
#-----------------------------------------------
# This script colorize a key of a 5Q Das Keyboard
# by sending a JSON signal to the its public API
# located at http://localhost:27301
#-----------------------------------------------
require 'json'
require 'net/http'

# Q desktop public API port #.
port = "27301"
# Q desktop public API url
url = 'http://localhost:'+port+'/api/1.0/signals'

# sending the signal to colorize the key A in red
uri = URI(url)
req = Net::HTTP::Post.new(uri, 'Content-type' => 'application/json')
req.body = { pid: "DK5QPID",
             zoneId: "KEY_A",
             color: "#F00",
             effect: "SET_COLOR",
             name: "Hello oneSignal",
             message: "signal sent from a ruby script to a key",
             shouldNotify: false }.to_json

res = Net::HTTP.start(uri.hostname, uri.port) do |http|
    http.request(req)
end

# checking the response
if res.body == "OK"
    puts res.body
else
    puts "Error while sending the signal: " + res.body
end</code></pre>
  </div>
  <figcaption class="text-center"><?php say("rest-api-collapse-subtitle"); ?></figcaption>
  </div>
  </div>
  </section>