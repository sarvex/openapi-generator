# coding: utf-8

"""
    Echo Server API

    Echo Server API  # noqa: E501

    The version of the OpenAPI document: 0.1.0
    Contact: team@openapitools.org
    Generated by OpenAPI Generator (https://openapi-generator.tech)

    Do not edit the class manually.
"""


from __future__ import annotations
from inspect import getfullargspec
import pprint
import re  # noqa: F401
import json


from typing import Optional
from pydantic import BaseModel, StrictInt, StrictStr

class Tag(BaseModel):
    """
    Tag
    """
    id: Optional[StrictInt] = None
    name: Optional[StrictStr] = None
    __properties = ["id", "name"]

    class Config:
        allow_population_by_field_name = True
        validate_assignment = True

    def to_str(self) -> str:
        """Returns the string representation of the model using alias"""
        return pprint.pformat(self.dict(by_alias=True))

    def to_json(self) -> str:
        """Returns the JSON representation of the model using alias"""
        return json.dumps(self.to_dict())

    @classmethod
    def from_json(cls, json_str: str) -> Tag:
        """Create an instance of Tag from a JSON string"""
        return cls.from_dict(json.loads(json_str))

    def to_dict(self):
        """Returns the dictionary representation of the model using alias"""
        return self.dict(by_alias=True, exclude={}, exclude_none=True)

    @classmethod
    def from_dict(cls, obj: dict) -> Tag:
        """Create an instance of Tag from a dict"""
        if obj is None:
            return None

        if type(obj) is not dict:
            return Tag.parse_obj(obj)

        return Tag.parse_obj({"id": obj.get("id"), "name": obj.get("name")})

