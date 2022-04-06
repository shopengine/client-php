# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

This project does adhere to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [feature/articlebundle]
### Added
- Require sentry/sentry-laravel
- Swagger Model Update for ArticleBundles

## [2.1.0] - 2022-04-06
### Added
- Added updatedAt property to conditionset

## [2.0.0] - 2021-10-23
### Added
- ShopEngineSettingsInterface to resolve a shop
- Clientfactory utilizing ShopEngineSettingsInterface
- Added Simple Default ShopEngineSettings Model
### Changed
- Updated to Guzzle 7
- Moved from gitlab to github
- Renamed package from ssb/api to shopengine/client-php
- Renamed SSBApiClient to ShopEngineApiClient
### Removed
- Config for shop settings
