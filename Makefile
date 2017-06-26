.PHONY: build
.PHONY: build-staging
.PHONY: clean
.PHONY: clean-cache
.PHONY: cs

PROJECTS = $(shell ls -p ./ | grep "/")


clean:
	@-for d in $(PROJECTS); do (cd $$d; $(MAKE) $@); done


clean-cache:
	@-for d in $(PROJECTS); do (cd $$d; $(MAKE) $@); done


build:
	@-for d in $(PROJECTS); do (cd $$d; $(MAKE) $@); done


run-tests:
	- test -f output.tap && rm output.tap
	@-for d in $(PROJECTS); do (cd $$d; $(MAKE) $@); done

cs:
	- test -f output.cs && rm output.cs
	@-for d in $(PROJECTS); do (cd $$d; $(MAKE) $@); done
