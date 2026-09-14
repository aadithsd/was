@echo off
echo Autorunning from BAT file!
echo Current date and time:
date /t
time /t
echo "Opening a browser automatically"
cd "C:\Program Files (x86)\Google\Chrome\Application\"
start chrome.exe
echo "Running an .exe file"
cd "C:\Program Files (x86)\VMware\"
    start vmplayer.exe
pause