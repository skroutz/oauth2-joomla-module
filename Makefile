mod_skroutzeasy.zip:
	zip -r mod_skroutzeasy.zip . -x @.zipignore

.PHONY: clean

clean:
	rm -f mod_skroutzeasy.zip
