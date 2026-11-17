# Changelog

All notable changes to this project will be documented in this file.

## 1.0.0 - 2026-11-17

First release: CCPA/CPRA retention (Cal. Civ. Code §1798.100(a)(3)) for Laravel, part of the laravel-ccpa suite.

- Reads the `retention` declared in `#[PersonalData]` and deidentifies each column, with its own strategy, once its period ends. The period counts from `created_at`, or from the column `HasRetentionStart` returns.
- `Keep` columns are nullified when their retention ends.
- Tombstones (no personal information) mean nothing is deidentified twice. `ccpa:retention-reapply` deletes again anything a backup restore brings back, including deletion requests.
- `ccpa:retention [--dry-run]`.

## [Unreleased]
