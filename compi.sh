default:
    if gcc -obuild $1  ; then \                                        
echo "su" ; \
else echo "cerror" ; fi
