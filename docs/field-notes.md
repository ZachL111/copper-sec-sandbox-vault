# Field Notes

I would read this project from the data inward: cases first, implementation second.

The domain cases cover `trust boundary`, `claim drift`, `replay exposure`, and `policy width`. They sit beside the smaller starter fixture so the project has both a compact scoring check and a domain-flavored review check.

The widest spread is between `trust boundary` and `replay exposure`, so those are the first two cases I would preserve during a refactor.

The language-specific addition keeps the review model strict and namespaced.
