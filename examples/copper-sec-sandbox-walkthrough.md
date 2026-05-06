# Copper Sec Sandbox Vault Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 213 | ship |
| stress | claim drift | 178 | ship |
| edge | replay exposure | 136 | watch |
| recovery | policy width | 148 | ship |
| stale | trust boundary | 209 | ship |

Start with `baseline` and `edge`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.
