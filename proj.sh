cmd_output=`timeout $1 ./$2`
if [ $? -eq 124 ]; then
    echo 'time limit exceeded'
else
    echo $cmd_output
fi
