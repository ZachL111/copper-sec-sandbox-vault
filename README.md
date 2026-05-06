# copper-sec-sandbox-vault

`copper-sec-sandbox-vault` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for sandbox stream reduction, using windowed input fixtures and late-data behavior checks.

## Purpose

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Copper Sec Sandbox Vault Review Notes

`baseline` and `edge` are the cases worth reading first. They show the optimistic and cautious ends of the fixture.

## What Is Covered

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/copper-sec-sandbox-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `replay exposure`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Notes

The repository has two validation layers: the original compact policy fixture and the domain review fixture. They are separate so one can change without hiding failures in the other.

The PHP implementation avoids hidden state so fixture changes are easy to reason about.

## Command

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Audit Path

The check exercises the source code and the review fixture. `baseline` is the high score at 213; `edge` is the low score at 136.

## Limits

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
