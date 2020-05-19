# Guvi-custom-server
## What is this ?
-- These are few basic php scripts to act as a server to serve the course metadata dumped by the courses downloader script.

## Why this approach?
-- Downloading courses is easier than this, but to make use of the convenience mobile devices offer, I have opted for this approach.

## How to use ?
### Prerequisites

1. A PHP server to host the files(Localhost or a free hosting account)
2. Course metadata dumped using the previous script
3. Modified Guvi app to redirect the requests to our server.

### Installation

1. Copy all the course metadata generated using the courses downloader script to the root of "server_dump" folder[Refer the free courses folder inside the server_dump for idea].
2. Ensure the courseFetch.txt inside server_dump folder is up to date with your enrolled courses.
3. For free courses support, ensure the courseFetch.txt inside server_dump folder is up to date with the free courses from the site.
4. copy model and sever_dump folder to the hosting site or localhost.
5. Use the modified apk[below for instructions] to view the courses.

### Modifing app

1. There are several ways to achieve this but the prefered approach is to modify the app to use our server 		 instead of the original server.
2. You can use apktool to decompile, search and change the hostname or can DM me for the apk.
3. You can use any credentials to login. As of now now the app's logical flow is not modified.

## Limitations 

1. Video material , course description and video details are only currently supported.
2. Login using google, registration, quizes, notification, codekata, zen, course enrolling, redeem functions are not supported as of now.


## Legal Guidelines

1. The contents in this repository is strictly for personal, educational and ethical use.
2. Abuse of service/resource using the contents in this repository is the sole user's responsibility neither the author of the scripts in this repository or the person who downloads them for personal use will not and should not be held responsible for the abuser's act.
