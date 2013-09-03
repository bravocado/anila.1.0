#!/bin/sh

echo "Installing clean project"

mv .git/modules .       && \
rm -rf .git/            && \
git init                && \
mv modules .git/        && \
git add vendor		   		&& \
git add .gitmodules     && \
rm go

echo "Anila project successfully installed"

git status