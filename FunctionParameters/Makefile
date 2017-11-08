.PHONY: build
.PHONY: build-staging
.PHONY: clean
.PHONY: clean-cache
.PHONY: cs


# Sestavení pro vývojáře
build:
	composer install


# Sestavení pro testovací server
build-staging:
	composer install


clean:
	git clean -xdf .


clean-cache:
	git clean -xdf .


run-tests:
	git clean -xdf tests/
	composer install --prefer-dist
	vendor/bin/tester -p php -o tap tests/ >> ../output.tap || true
	git clean -xdf tests/


cs:
	- vendor/bin/phpcs src/ --standard=vendor/pd/coding-standard/src/PeckaCodingStandard/ruleset.xml --report-file=output.cs
	- vendor/bin/phpcs src/ --standard=vendor/pd/coding-standard/src/PeckaCodingStandardStrict/ruleset.xml --report-file=output-strict.cs
	- test -f output.cs && cat output.cs >> ../output.cs && rm output.cs
	- test -f output-strict.cs && cat output-strict.cs >> ../output.cs && rm output-strict.cs
